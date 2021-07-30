<?php
class PageData {
    public function __construct()
    {
        print 'Page Data Instanciado' . PHP_EOL;
    }

    public function getHtml()
    {
        return "Obtido o HTML";
    }
}

class HtmlUtil {
    /**
     * Verificamos se a página é de teste, se for, incluimos setups e teardowns.
     * Em ambos os casos exibimos a página HTML
     */
    public static function renderPageWithSetupAndTeardowns(
        PageData $pageData, bool $isSuite) : String 
    {
        if (self::isTestPage($pageData))
            self::includeSetupAndTeardownPages($pageData, $isSuite);
        return $pageData->getHtml();
    }

    private static function isTestPage(PageData $pageData)
    {
        print "Verificado se é uma página de teste" . PHP_EOL;
    }

    private static function includeSetupAndTeardownPages(PageData $pageData, $isSuite)
    {
        print "Incluido o Setup e o TearDown" . PHP_EOL;
    }
}

class App {
    public static function main() {
        $pageData = new PageData();
        print HtmlUtil::renderPageWithSetupAndTeardowns($pageData, true) . PHP_EOL;
    }
}

App::main();