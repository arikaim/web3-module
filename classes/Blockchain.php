<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Web3\Classes;

/**
 * Blockchain class
 */
class Blockchain 
{
    const BLOCKCHAIN = [
        'Ethereum'
    ];
     
    protected static $ethereumNetworks = [
        1  => [
            'hex'  => '0x1',
            'name' => 'Ethereum Main Network (Mainnet)'
        ],
        3  => [
            'hex'  => '0x3',
            'name' => 'Ropsten Test Network'
        ],
        4  => [
            'hex'  => '0x4',
            'name' => 'Rinkeby Test Network'
        ],
        5  => [
            'hex'  => '0x5',
            'name' => 'Goerli Test Network'
        ],
        42  => [
            'hex'  => '0x2a',
            'name' => 'Kovan Test Network'
        ]
    ];

    public static function getBlockchainName(int $index): ?string
    {
        return Self::BLOCKCHAIN[$index] ?? null;
    }

    public static function getNetworkName($index): ?string
    {
        $name = Self::$ethereumNetworks[$index] ?? null;
        return $name;
    }
}
