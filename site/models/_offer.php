<?php

// For a content file called `project.txt`
// In general the class name is {{ProjectFileName}}Page

class OfferPage extends Page {
  public function url($options = null): string {
    return $this->site()->url() . '/'. $this->slug();
  }
}
?>