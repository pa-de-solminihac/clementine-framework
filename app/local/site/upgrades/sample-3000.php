-<?php
/**
 * Script non interactif de mise à jour
 */

// deja appele par l'installer
// $db->beginTransaction();

$requetes = array (
    '-- CREATE TABLE ...',
);
// execute les requetes une par une et rollback au moindre plantage
foreach ($requetes as $sql) {
    if (!$db->prepare($sql)->execute()) {
        $db->rollBack();
        return false;
    }
}

// deja appele par l'installer
// $db->commit();

return true;
