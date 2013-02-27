<?php
/* Ce block est appelé automatiquement par Clémentine, qui lui passe pour */
/* paramètre $data le tableau $this->data rempli dans le contrôleur. */
$this->getBlock('index/header', $data);
?>
<h1><?php echo $data['titre']; ?></h1>
<p>
    Le <em>contrôleur</em> de cette page est dans le fichier :
    <pre><?php echo $data['fichier_controleur']; ?></pre>
    <br />
    La <em>vue</em>, appelée <strong>block</strong> dans Clémentine, est dans le fichier :
    <pre><?php echo __FILE__; ?></pre>
</p>
<p>
    Mais pour commencer, si on activait le debug et l'affichage des erreurs ?
    On ne sait jamais, des fois que quelqu'un ait laissé traîner une <em>Notice</em>...
    <br />
    <br />
    Ajoutons donc les lignes suivantes dans notre fichier <em>config.ini</em> :

<pre>
[clementine_debug]
enabled=1
allowed_ip=
display_errors=1
send_errors_by_email=0
log_errors=1
</pre>

    Puis <a href="">rafraîchissons la page</a>...

</p>
<?php
$this->getBlock('index/footer', $data);
?>
