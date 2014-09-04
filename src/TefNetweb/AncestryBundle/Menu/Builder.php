<?php
/**
 *
 * released under the terms of the gpl2 licence
 * you can get a copy of the licence from http://www.gnu.org/licenses/gpl-2.0.txt
 * @author Ugo Ariu <ugoariu@gmail.com>
 *
 */

namespace TefNetweb\AncestryBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{

    public function mainMenu(FactoryInterface $factory, array $options)
    {

        $menu = $factory->createItem('root',
            array(
                'attributes' => array(
                    'pills' => true,
                    'automenu' => true,
                    'class' => 'nav navbar-nav',
                    'navbar' => true,
                    'pull-right' => false,
                    'tabindex' => "-1"
                )
            ));

        $menu->addChild('Home',
            array(
                'route' => 'tefnetweb_ancestry_homepage',
                'attributes' => [
                    'icon' => 'home',
                ]
            ));


        $menu->addChild('Births',
            array(
                'route' => 'birth',
                'attributes' => [

                ]
            ))->setExtra('translation_domain', 'messages');

        $menu->addChild('Marriages',
            array(
                'route' => 'marriage',
                'attributes' => [
                ]
            ))->setExtra('translation_domain', 'messages');

        $menu->addChild('Deaths',
            array(
                'route' => 'death',
                'attributes' => array()
            ))->setExtra('translation_domain', 'messages');

        $this->recursiveDecorateMenu($menu);
        return $menu;
    }

    private function recursiveDecorateMenu(ItemInterface & $item)
    {
        $this->menuItemsDecorator($item);
        if ($item->hasChildren()) {
            foreach ($item as & $it) {
                $this->menuItemsDecorator($it);
                if ($it->hasChildren()) {
                    foreach ($it->getChildren() as & $child) {
                        $this->recursiveDecorateMenu($child);
                    }
                }
            }
        }

    }

    private function menuItemsDecorator(ItemInterface & $item)
    {
        $helper = new AncestryMenuExtensionHelper();
        $helper->buildItem($item, $helper->buildOptions($item->getAttributes()));

    }

}
