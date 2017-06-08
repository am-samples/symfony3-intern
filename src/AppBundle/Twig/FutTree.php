<?php
namespace AppBundle\Twig;

class FutTree extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('FutTree', array($this, 'futTreeFilter')),
        );
    }

    public function futTreeFilter(String $text)
    {
        $text = preg_replace("#\'(.*?)\'#", '«$1»', $text);
        $text = preg_replace('#\"(.*?)\"#', '«$1»', $text);

        return $text;
    }
}