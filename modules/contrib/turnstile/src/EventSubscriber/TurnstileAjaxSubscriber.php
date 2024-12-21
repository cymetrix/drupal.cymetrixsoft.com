<?php declare(strict_types = 1);

namespace Drupal\turnstile\EventSubscriber;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\BaseCommand;
use Drupal\turnstile\Turnstile\Turnstile;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * If an Ajax response for a page that contains a Turnstile widget, add a turnstile.render() command.
 * 
 * @see https://www.drupal.org/project/turnstile/issues/3330710
 */
final class TurnstileAjaxSubscriber implements EventSubscriberInterface {

  /**
   * Kernel response event handler.
   */
  public function onResponse(ResponseEvent $event): void {
    $response = $event->getResponse();
    if ($response instanceof AjaxResponse && $event->getRequest()->get('captcha_response') == Turnstile::EMPTY_CAPTCHA_RESPONSE) {
      $response->addCommand(new BaseCommand('turnstileRender', []));
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    return [
      KernelEvents::RESPONSE => ['onResponse'],
    ];
  }

}
