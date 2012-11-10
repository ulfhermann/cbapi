<?php

Cb::import('CbContentFormatterInterface');

class CbJsonFormatter implements CbContentFormatterInterface {

   /**
    * @param $content Content to be formatted.
    * @return String to be output.
    */
   public function format($content) {
      echo json_encode($content);
   }

   public function contentType($additional = null) {
      return "application/json";
   }
}