<?php

namespace AppBundle\Controller;

use AppBundle\Entity\commentaires;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:default:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,

        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogPage(Request $request)
    {
        $blog = $this->getDoctrine()->getRepository('AppBundle:Blog')->findAll();
        return $this->render('AppBundle:blog:index.html.twig',[
            'articles' => $blog
        ]);
    }

    /**
     * @Route("/articles/{id}", name="show_article", requirements={"id"="\d+"})
     */
    public function showArticle(Request $request, $id) {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Blog');
        $article = $repo->find($id);
        $commentary = new commentaires();

        $repo = $this->getDoctrine()->getRepository('AppBundle:commentaires');
        $comment = $repo->findAllComment($id);

        $form = $this->createFormBuilder($commentary)
            ->add('pseudo', TextType::class)
            ->add('commentaires', TextareaType::class)
            ->add('idarticle', HiddenType::class, ['data' => $id])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newCom = $form->getData();
            $repo = $this->getDoctrine()->getManager();
            $repo->persist($newCom);
            $repo->flush();
        }


        return $this->render('AppBundle:blog:article.html.twig', [
            'arts' => $article,
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }
}
