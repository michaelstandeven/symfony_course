<?php
/**
 * Created by PhpStorm.
 * User: mstandeven
 * Date: 8/2/2018
 * Time: 2:11 PM
 */

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

class UserRegisterEvent extends Event
{
    const NAME = 'user.register';
    /**
     * @var User
     */
    private $registeredUser;

    /**
     * UserRegisterEvent constructor.
     */
    public function __construct(User $registeredUser)
    {
        $this->registeredUser = $registeredUser;
    }

    /**
     * @return User
     */
    public function getRegisteredUser(): User
    {
        return $this->registeredUser;
    }
}