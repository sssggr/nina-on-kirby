<?php
class OfferPage extends Page {
    public function urlForLanguage($language = null, array|null $options = null): string
    {
        return $this->site()->urlForLanguage($language) . '/' . $this->slug($language);
    }
}
?>