<?php
namespace ComposerTest;

use Composer\Script\Event;

/**
 * Description of Install
 *
 * @author andy
 */
class Setup {
    /* Properties: Dependencies --------------------------------------------- */

    /* Properties: Public --------------------------------------------------- */
    
    /* Properties: Protected/Private ---------------------------------------- */

    /* Methods: Constructor ------------------------------------------------- */

    /* Methods: Getter/Setter ----------------------------------------------- */

    /* Methods: Public ------------------------------------------------------ */

    public static function preInstall(Event $Event) {
        
        $IO = $Event->getIO();
        
        if ($IO->askConfirmation("Are you sure you want to install ComposerTest? ", false)) {

            return true;
        }

        exit;
    }
    
    public static function postInstall(Event $Event) {
        
        $IO = $Event->getIO();
        
        
    }
    
    static function preInstall(Event $Event) {
        
        $IO = $Event->getIO();
        
        if ($IO->askConfirmation("Are you sure you want to update ComposerTest? ", false)) {
            
            return true;
        }

        exit;
    }
    
    public static function postUpdate(Event $Event) {
        
        $IO = $Event->getIO();
    }
    
    /* Methods: Protected/Private ------------------------------------------- */

    /* ---------------------------------------------------------------------- */
}