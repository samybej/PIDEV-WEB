<?php

namespace Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Entity;

/**
 * Class BasicConstraintsRepository
 *
 * @package Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Entity
 */
class BasicConstraintsRepository extends BaseEntityRepository
{
    public function getData()
    {
        return array(
            array(
                'email' => 'wrong_email',
                'url'   => null,
                'ip'    => null
            ),
            array(
                'email' => 'existing_email',
                'name'  => 'existing_name',
                'url'   => 'existing_url',
                'ip'    => 'existing_ip'
            )
        );
    }
}