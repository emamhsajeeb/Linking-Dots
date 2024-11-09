<?php

/**
 * ajax -> payments -> myfatoorah
 * 
 * @package LinkingDots
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

// check if MyFatoorah enabled
if (!$system['myfatoorah_enabled']) {
  modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
}

try {

  switch ($_POST['handle']) {
    case 'packages':
      // valid inputs
      if (!isset($_POST['package_id']) || !is_numeric($_POST['package_id'])) {
        _error(400);
      }

      // get package
      $package = $user->get_package($_POST['package_id']);
      if (!$package) {
        _error(400);
      }
      /* check if user already subscribed to this package */
      if ($user->_data['user_subscribed'] && $user->_data['user_package'] == $package['package_id']) {
        modal("SUCCESS", __("Subscribed"), __("You already subscribed to this package, Please select different package"));
      }

      // get myfatoorah link
      $link = myfatoorah("packages", $package['price'], $package['package_id']);
      break;

    case 'wallet':
      // valid inputs
      if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {
        _error(400);
      }

      // get myfatoorah link
      $link = myfatoorah("wallet", $_POST['price']);
      break;

    case 'donate':
      // valid inputs
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }

      // get post
      $post = $user->get_post($_POST['post_id']);
      if (!$post) {
        _error(400);
      }

      // get myfatoorah link
      $link = myfatoorah("donate", $_POST['price'], $_POST['post_id']);
      break;

    case 'subscribe':
      // valid inputs
      if (!isset($_POST['plan_id']) || !is_numeric($_POST['plan_id'])) {
        _error(400);
      }

      // get plan
      $monetization_plan = $user->get_monetization_plan($_POST['plan_id'], true);
      if (!$monetization_plan) {
        _error(400);
      }
      /* check if user already subscribed to this node */
      if ($user->is_subscribed($monetization_plan['node_id'], $monetization_plan['node_type'])) {
        modal("SUCCESS", __("Subscribed"), __("You already subscribed to this") . " " . __($_POST['node_type']));
      }

      // get myfatoorah link
      $link = myfatoorah("subscribe", $monetization_plan['price'], $_POST['plan_id']);
      break;

    case 'paid_post':
      // valid inputs
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }

      // get post
      $post = $user->get_post($_POST['post_id'], false, false, true);
      if (!$post) {
        throw new Exception(__("This post is not available"));
      }
      if (!$post['needs_payment']) {
        throw new Exception(__("This post doesn't need payment"));
      }

      // get myfatoorah link
      $link = myfatoorah("paid_post", $post['post_price'], $_POST['post_id']);
      break;

    case 'movies':
      // valid inputs
      if (!isset($_POST['movie_id']) || !is_numeric($_POST['movie_id'])) {
        _error(400);
      }

      // get movie
      $movie = $user->get_movie($_POST['movie_id']);
      /* check if user already paid to this movie */
      if ($movie['can_watch']) {
        modal("SUCCESS", __("Paid"), __("You already paid to this movie"));
      }

      // get myfatoorah link
      $link = myfatoorah("movies", $movie['price'], $_POST['movie_id']);
      break;

    case 'marketplace':
      // valid inputs
      if (!isset($_POST['orders_collection_id'])) {
        _error(400);
      }

      // get orders collection
      $orders_collection = $user->get_orders_collection($_POST['orders_collection_id']);
      /* check if order collection exists */
      if (!$orders_collection) {
        _error(400);
      }
      /* check if user already paid to this order collection */
      if ($orders_collection['paid']) {
        modal("SUCCESS", __("Paid"), __("You already paid to this order"));
      }

      // get myfatoorah link
      $link = myfatoorah("marketplace", $orders_collection['total'], $_POST['orders_collection_id']);
      break;

    default:
      _error(400);
      break;
  }

  // return & exit
  return_json(['callback' => 'window.location.href = "' . $link . '";']);
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
