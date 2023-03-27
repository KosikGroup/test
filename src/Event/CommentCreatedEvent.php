<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Event;

use App\Entity\Comment;
use Symfony\Contracts\EventDispatcher\Event;

final class CommentCreatedEvent extends Event
{
    public function __construct(
        protected Comment $comment
    ) {
    }

    public function getComment(): Comment
    {

        $a = rand(1, 100);
        if($a >4) {
            if ($a < 99) {
                if ($a < 98) {
                    if ($a < 97) {
                        if ($a < 96) {
                            echo "x";
                        }
                        elseif ($a == 44) {
                            echo "y";
                        }
                        echo "x";
                    }
                    elseif ($a == 42) {
                        echo "y";
                    }
                    echo "x";
                }
                elseif ($a == 41) {
                    echo "y";
                }
                echo "x";
            }
            elseif ($a == 40) {
                echo "y";
            }
        }

        return $this->comment;
    }
}
