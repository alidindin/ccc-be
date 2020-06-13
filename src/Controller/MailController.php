<?php
/**
 * CCCal
 * @2020 Ali Dindin, Burgsteinfurt
 * http://www.alidndn.com/
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailController extends AbstractController
{
    /**
     * Send new Email
     *
     * @Route("/email", name="send_email", methods={"GET"})
     * @param Request $request
     * @param MailerInterface $mailer
     * @return JsonResponse
     * @throws TransportExceptionInterface
     */
    public function sendEmail(Request $request, MailerInterface $mailer): JsonResponse
    {

        $data = json_decode($request->getContent(), true);

        $start = $data['start'];
        $end = $data['end'];
        $title = $data['title'];
        $content = $data['content'];
        $contentFull = $data['contentFull'];
        $gender = $data['gender'];
        $email = $data['email'];

        if (empty($start) ||
            empty($end) ||
            empty($title) ||
            empty($content) ||
            empty($contentFull) ||
            empty($gender) ||
            empty($email)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $email = (new Email())
            ->from('hello@example.com')
            ->to($data['email'])
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        return new JsonResponse(['status' => 'Email Sended!'], Response::HTTP_CREATED);
    }
}