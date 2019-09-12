<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Adapter\RealWorld;

final class AddressController
{
    private $geocoder;

    /*
        We’re using some dependency injection into the controller, which is great. This is a step in the
        right direction and solves some problems for us, but it’s still strongly coupling our controller to
        whoever Bill is. What if he goes away? What if you figure out DavesGeocoder is so much better
        because it supports Zip+4, which BillsGeocoder didn’t? And what if you just happen to use
        this geocoder all over the place and now you have to go update all those references? What if
        DavesGeocoder doesn’t have a geocode() method but instead has validateAddress() . You’ve
        run into a refactoring nightmare.
    */

    public function __construct(BillsGeocoder $geocoder) {
        $this->geocoder = $geocoder;
    }

    public function validateAddressAction(Request $request) {
        $address = $request->get('address');
        $isValid = $this->geocoder->geocode($address) !== false;
    }
}
