<?php
namespace controllers;

use models\Book;

include '../models/Book.php';

class BookController extends Controller
{
    public $data = [];

    public function __construct()
    {
        $this->data[1] = new Book(1, 'Império De Tempestades - Vol.5 - Tomo 2 - Série Trono De Vidro', 'Sarah J. Maas', 'A história de Aelin Galathynius, sempre repleta de ação e intrigas, continua nesta segunda parte do quinto livro da série, Império de tempestades Aelin Galathyius sobreviveu a prisão, à perda de amigos e amores, às traições. Agora deve vencer seu maior medo para salvar o mundo. Com a vida e poder jurados ao povo que está determinada a salvar, a antiga assassina, conhecida como Celaena Sardothien, colocará a própria segurança em risco para proteger os seus. Mais que nunca, Aelin precisa de Rowan, de Dorian e de todos os aliados para conseguir descobrir a localização da relíquia sagrada capaz de banir de seu mundo a ameaça valg e os horrores libertados em Morath. Chegou a hora de levantar os exércitos de Erilea. De cobrar velhas dívidas... É hora de marchar contra o mais supremo dos males. E confiar na pureza de seu coração para trazer a luz.');
        $this->data[2] = new Book(2, 'Harry Potter E A Câmara Secreta - Edição Ilustrada', 'J. K. Rowling', 'Depois de Harry Potter e a Pedra Filosofal, é a vez de Harry Potter e a Câmara Secreta chegar às prateleiras em edição ilustrada e capa dura. Cenas de tirar o fôlego, momentos tensos da trama e personagens inesquecíveis esperam os leitores nesta edição mágica que traz o texto integral de J.K. Rowling e desenhos do premiado Jim Kay. Com tinta, papel e pixels, o ilustrador britânico cria um mundo encantado como nunca antes visto para acompanhar o segundo ano de Harry Potter na Escola de Magia de Hogwarts.');
        $this->data[3] = new Book(3, 'Signos Da Marca: Expressividade E Sensorialidade', 'Clotilde Perez', 'Compre o livro Signos da Marca: Expressividade e Sensorialidade em até 6x sem juros. A Cia. dos Livros oferece mais de 200 mil livros com os melhores preços. Confira! O livro Signos da Marca: Expressividade e Sensorialidade, da autora Clotilde Perez, está em sua 2ª edição publicada pela editora Cengage Learning Nacional. Esta edição traz uma cuidadosa atualização e adensamento dos conceitos centrais da comunicação e gestão das marcas, no contexto da sociedade contemporânea, e aponta caminhos possíveis para os gestores das marcas no sentido de potencializarem sua força comunicacional e, portanto, a capacidade de construírem vínculos com os consumidores-alvo. A obra é ideal tanto para estudantes como para profissionais da área de Gestão Estratégica de Marca, pois apresenta análises semióticas que auxiliam na melhoria de resultados de pesquisa de mercado. Compre o livro Signos da Marca: Expressividade e Sensorialidade no site da Cia. dos Livros.');
    }

    public function actionIndex()
    {
        include $this->viewFile;
    }

    public function actionView()
    {
        $model = $this->data[$_GET['id']];
        include $this->viewFile;
    }
}
