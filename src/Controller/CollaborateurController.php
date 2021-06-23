<?php

namespace App\Controller;

use App\Entity\Collaborateur;
use App\Form\CollaborateurType;
use App\Repository\CollaborateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/collaborateur")
 */
class CollaborateurController extends AbstractController
{
    private $encoder;

    public function __construct( UserPasswordEncoderInterface $encoder )
    {
        $this->encoder = $encoder;
    }

    /**
     * @Route("/", name="collaborateur_index", methods={"GET"})
     */
    public function index(CollaborateurRepository $collaborateurRepository): Response
    {
        return $this->render('collaborateur/index.html.twig', [
            'collaborateurs' => $collaborateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="collaborateur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $collaborateur = new Collaborateur();
        $form = $this->createForm(CollaborateurType::class, $collaborateur);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            // $collaborateur = $this->register($encoder, $collaborateur);
            $collaborateur = $collaborateur->setMotDePasse( $this->encoder->encodePassword( $collaborateur, $collaborateur->getPassword() ) );
            $collaborateur->setRoles(array('ROLE_USER'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($collaborateur);
            $entityManager->flush();

            $this->addFlash('success', 'Le collaborateur a bien été ajouté');

            return $this->redirectToRoute('collaborateur_index');
        }

        return $this->render('collaborateur/new.html.twig', [
            'collaborateur' => $collaborateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="collaborateur_show", methods={"GET"})
     */
    public function show(Collaborateur $collaborateur): Response
    {
        return $this->render('collaborateur/show.html.twig', [
            'collaborateur' => $collaborateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="collaborateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Collaborateur $collaborateur,UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(CollaborateurType::class, $collaborateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passwordEncoded = $encoder->encodePassword($collaborateur, $request->request->get('password'));
            $collaborateur->setRoles(array('ROLE_USER'));
            $collaborateur->setMotDePasse($passwordEncoded);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Le collaborateur a bien été modifié');

            return $this->redirectToRoute('collaborateur_index');
        }

        return $this->render('collaborateur/edit.html.twig', [
            'collaborateur' => $collaborateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="collaborateur_delete", methods={"POST"})
     */
    public function delete(Request $request, Collaborateur $collaborateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$collaborateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($collaborateur);
            $entityManager->flush();
        }

        $this->addFlash('success', 'Le collaborateur a bien été effacé');

        return $this->redirectToRoute('collaborateur_index');
    }

    public function register(UserPasswordEncoderInterface $encoder,Collaborateur $user)
    {
        $plainPassword = 'test';
        $encoded = $encoder->encodePassword($user, $plainPassword);
        $user->setMotDePasse($encoded);
    }
}
