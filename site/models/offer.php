<?php
class OfferPage extends Page {
    public function urlForLanguage($language = null, array $options = null): string
    {
        if ($language === null || $this->kirby()->defaultLanguage()->code() === $language) {
            return $this->url = $this->site()->urlForLanguage($language) . '/' . $this->slug($language);
        }
        
        return parent::urlForLanguage($language, $options);
    }
}
?>