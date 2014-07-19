<!-- File: /app/View/Posts/index.ctp -->

<h1>Lista perros</h1>

<table>
    <tr>
        <th>NOMBRE</th>
        <th>FECHA</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
    <?php 
        foreach ($posts as $post): 
            $fechaCreacion = new Datetime($post['Post']['created']);
            $fechaBusqueda = new DateTime('2014-06-14 19:33');

            if($fechaCreacion > $fechaBusqueda) {
        ?>
                <tr>
                    <td>
                        <?php        
                            echo $this->Html->link(
                                $post['Post']['name'],
                                array('action' => 'view', $post['Post']['id'])
                            );
                        ?>
                    </td>
                   
                    <td>
                        <?php 
                            echo $post['Post']['created']; 
                        ?>
                    </td>
                </tr>
        <?php 
            } 
        endforeach; 
        ?>
</table>