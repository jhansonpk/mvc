<h>Lista de livros</h>
<hr>

<?
foreach ($books as $value)
{
    print "<a href='/book/view/{$value->getId()}'>{$value->getTitle()}</a>";
    print '<br>';
    print '<br>';
}

?>
<hr>
<br>
<a href="/">Voltar</a>
