<?php

use PHPUnit\Framework\TestCase;

class AbsRegisterCardTest extends TestCase {

    private $shortcutsDir;

    public function setUp(): void {
        require_once 'htdocs/func.php';
        $this->shortcutsDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "phoniebox-shortcuts-" . getmypid();
        if (!is_dir($this->shortcutsDir)) {
            mkdir($this->shortcutsDir, 0777, true);
        }
    }

    public function tearDown(): void {
        if (!is_dir($this->shortcutsDir)) {
            return;
        }
        foreach (glob($this->shortcutsDir . DIRECTORY_SEPARATOR . "*") as $file) {
            if (is_file($file)) {
                @chmod($file, 0666);
                @unlink($file);
            }
        }
        @rmdir($this->shortcutsDir);
    }

    public function testReplacesCardIdShortcutLeftByFirstSwipe() {
        $cardId = "1290240295984256";
        $folderName = "The Hobbit";
        $shortcut = $this->shortcutsDir . DIRECTORY_SEPARATOR . $cardId;
        // First swipe: reader writes the card id and the web user may not be able to open it for writing.
        file_put_contents($shortcut, $cardId . "\n");
        chmod($shortcut, 0444);

        $this->assertTrue(absWriteShortcut($this->shortcutsDir, $cardId, $folderName));
        $this->assertSame($folderName, trim(file_get_contents($shortcut)));
    }

    public function testKeepsApostropheInFolderName() {
        $cardId = "1290240295984256";
        $folderName = "Harry Potter and the Philosopher's Stone";

        $this->assertTrue(absWriteShortcut($this->shortcutsDir, $cardId, $folderName));
        $shortcut = $this->shortcutsDir . DIRECTORY_SEPARATOR . $cardId;
        $this->assertSame($folderName, trim(file_get_contents($shortcut)));
    }
}
