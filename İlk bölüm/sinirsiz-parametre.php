<?php   
/* 
func_num_arg = kaç tane argüman, parametre gelmiş onu bulabiliyoruz.( fonksiyonda)
func_get_args = parametrelerin listesini dizi olarak dönürebiliyoruz.
func_get_arg = bi index numarası vererek o parametrenin değerine ulaşmış oluyoruz. yani parametre değerini 
yazarak o elemanı ekrana yazdırıyoruz
*/

function test()
{
    echo func_num_args();
    echo ("<br>");
    print_r(func_get_args());  // parametre değerlerini dizi olarak yazdırdık.
    echo func_get_arg(2); // 2 numaralı paratmeryi yazdırdık.
}
test('kağan', "yüksel", "asd", "udemy");
?>
