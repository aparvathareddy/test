<?php

namespace PetShop;

use PetShop\Animal;

/**
 * Class Dog
 *
 * Dog class inherits its characteristics from Animal class. It is capable of initiating the Dog with a random age set
 * Dog can be without name or a name can be set at the time of initiation. It is capable of speaking too.
 *
 * @package petShop
 */
class Dog extends Animal
{

    /**
     * @var string
     */
    private $iSpeak = 'woof';

    /**
     * This method speaks the text if provided as argument or it will get the sound from iSpeak property
     *
     * @param null $say
     * @return string
     */
    public function speak($say = null)
    {
        $this->totalSpeaks++;

        return is_null($say) ? $this->iSpeak : $say;
    }
}