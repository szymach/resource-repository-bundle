<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\Bundle\ResourceRepositoryBundle\DependencyInjection\Compiler;

use FSi\Bundle\ResourceRepositoryBundle\Exception\CompilerPassException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class ResourcePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $resources = [];
        foreach ($container->findTaggedServiceIds('resource.type') as $serviceId => $tag) {
            if (false === \array_key_exists('alias', $tag[0])) {
                throw new CompilerPassException(sprintf('Service %s missing alias attribute', $serviceId));
            }

            $resourceService = $container->getDefinition($serviceId);
            $resources[$tag[0]['alias']] = $resourceService->getClass();
        }

        $container->setParameter('fsi_resource_repository.resource.types', $resources);
    }
}
