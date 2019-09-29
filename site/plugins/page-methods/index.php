<?php

Kirby::plugin('cuboctaedro/page-methods', [
    'pageMethods' => [

        'forcedDescription' => function () {
            if ($this->description()->exists() && $this->description()->isNotEmpty()) {
                return $this->description()->excerpt(180);
            } elseif ($this->text()->exists() && $this->text()->isNotEmpty()) {
                return $this->text()->excerpt(180);
            } else {
                return "" ;
            }

        },

        'forcedImage' => function () {
            if ($this->coverimage()->exists() && $this->coverimage()->isNotEmpty()) {
                return $this->coverimage()->toFile();
            } elseif ($this->headerimage()->exists() && $this->headerimage()->isNotEmpty()) {
                return $this->headerimage()->toFile();
            } elseif ($this->hasImages()) {
                return $this->images()->first();
            } elseif ($this->site()->siteimage()->exists() && $this->site()->siteimage()->isNotEmpty()) {
                return $this->site()->siteimage() ;
            } else {
                return asset('assets/images/solcare-logo-large.png');
            }
        },

        'forcedHeader' => function () {
            if ($this->headerimage()->exists() && $this->headerimage()->isNotEmpty()) {
                return $this->headerimage()->toFile();
            } else {
                return asset('assets/images/default-header.jpg');
            }
        },

    ]
]);
