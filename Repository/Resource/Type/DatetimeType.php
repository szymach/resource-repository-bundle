<?php

/**
 * (c) Fabryka Stron Internetowych sp. z o.o <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\ResourceRepositoryBundle\Repository\Resource\Type;

class DatetimeType extends AbstractType
{
    /**
     * @var \Symfony\Component\Form\FormBuilder
     */
    protected $formBulder;

    /**
     * {@inheritdoc}
     */
    public function getResourceProperty()
    {
        return 'datetimeValue';
    }

    /**
     * {@inheritdoc}
     */
    protected function getFormType()
    {
        return 'datetime';
    }
}