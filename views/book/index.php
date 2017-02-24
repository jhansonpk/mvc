<h>Lista de livros</h>
<hr>

<?
foreach ($this->data as $value)
{
    print "<a href='/?page=book&action=view&id={$value->getId()}'>{$value->getTitle()}</a>";
    print '<br>';
    print '<br>';
}

?>
<hr>
<br>
<a href="/">Voltar</a>
