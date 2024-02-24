## PDO

  <p>
    O PDO (PHP Data Object) é uma extensão da linguagem PHP para acesso a banco
    de dados. Totalmente orientado a objetos ele possui diversos recursos
    importantes, além de suporte a diversos mecanismos de banco de dados.
  </p>
  <div></div>
  <div>
    <p>
      Para inserir o PDO você precisa instanciar ele com <code>new</code> e
      passar 4 infromações importantes nos parametros, nessa ordem:
    </p>
    <h6>Name e Host precisam de prefixos específicos quando usados..</h6>
    <ol>
      <li><code>Name</code></li>
      <li><code>Host</code></li>
      <li><code>User</code></li>
      <li><code>Password</code></li>
    </ol>

    $pdo = new PDO("mysql:dbname=" .$name "; host=".$host, $user, $password)

  </div>
