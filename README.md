# WFcart
Free Open Source Library / Package Shopping Cart For Codeigniter 4

## Cara Install

1. Masuk ke dalam direktory project/app/ThirdParty

<pre><code>cd app/ThirdParty</code></pre>

2. Clone Repository

<pre><code>git clone https://github.com/wildanfuady/WFcart.git</code></pre>

3. Aktifkan autoload. Silahkan buka file app/Config/Autoload.php dan cari kode berikut ini:

<pre><code>$psr4 = [
	'App'         => APPPATH,                // To ensure filters, etc still found,
	APP_NAMESPACE => APPPATH,                // For custom namespace
	'Config'      => APPPATH . 'Config'
];</pre></code>

Tambahkan 1 baris kode di bawah ini:

<pre><code>$psr4 = [
	'App'         => APPPATH,                // To ensure filters, etc still found,
	APP_NAMESPACE => APPPATH,                // For custom namespace
	'Config'      => APPPATH . 'Config',
	'Wildanfuady' => APPPATH . 'ThirdParty/WFcart/Wildanfuady'
];</pre></code>

## Cara Penggunaan

1. Tambahkan kode berikut sebelum nama class di Controller

<pre><code>use Wildanfuady\WFcart\WFcart;

class Cart extends BaseController
{
    // code
}</pre></code>

2. Pada function construct, tambahkan baris kode di bawah ini:

<pre><code>public function __construct() {

	$this->cart = new WFcart();

}</pre></code>

3. Untuk mendapatkan data total keranjang belanja, gunakan perintah di bawah ini:

<pre><code>$this->cart->totals();</pre></code>

4. Untuk mendapatkan data total belanja ( quantity * sub total), gunakan perintah di bawah ini:

<pre><code>$this->cart->count_totals();</pre></code>

5. Untuk memasukan suatu product ke dalam keranjang belanja, gunakan perintah di bawah ini:

<pre><code>$id = 1; // ambil dari kode product
$item = [
	'id'		=> $id,
	'name'		=> 'Product 1,
	'price'		=> 1000,
	'photo'		=> 'product1.jpg',
	'quantity'	=> 1
];
$this->cart->add_cart($id, $item);</pre></code>

6. Untuk menghapus suatu product berdasarkan id di dalam keranjang belanja, gunakan perintah di bawah ini:

<pre><code>$this->cart->remove($id);</pre></code>

7. Untuk mengupdate keranjang belanja, silahkan gunakan perintah di bawah ini:

<pre><code>$this->cart->update();</pre></code>

## Tutorial Pendukung

1. https://ilmucoding.com/shopping-cart-codeigniter-4/ (Part 1)
2. https://ilmucoding.com/cart-codeigniter-4/ (Part 2)
