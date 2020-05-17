# WFcart
Free Open Source Library / Package Shopping Cart For Codeigniter 4

## Cara Install

1. Masuk ke dalam direktory project/ThirdParty

<pre><code>cd ThirdParty</code></pre>

2. Clone Repository

<pre><code>git clone https://github.com/wildanfuady/WFcart.git</code></pre>

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
	'photo'		=> 'Lorem ipsum,
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
