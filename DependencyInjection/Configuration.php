<?php

namespace Hautelook\UPSApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hautelook_ups_api');

        $rootNode
            ->children()
                ->scalarNode('access_key')
                    ->info('The UPS access key')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('user_id')
                    ->info('The UPS user id')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('password')
                    ->info('The UPS password')
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
