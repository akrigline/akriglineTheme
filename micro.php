<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package akrigline
 */
?>

<?php
  $request_url = "http://akrigline.tumblr.com/api/read?start=0&num=1";
  $xml = simplexml_load_file($request_url);
  $link = $xml->posts->post['url'];
  $title = $xml->posts->post->{'regular-title'};
  $content = $xml->posts->post->{'regular-body'};

  function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
  };

  $excerpt = limit_text($content, 100);
?>

<div class="col-xs-12 col-md-6">
  <a href="http://akrigline.tumblr.com"><h1>Microruminations</h1></a>
  <article>
    <a href="<?php echo $link; ?>"><h2><?php echo $title; ?></h2></a>
    <p><?php echo $excerpt; ?></p>
    <a href="<?php echo $link; ?>" class="to-tumblr">Read more</a>
  </article>
</div>