//name="can"

//var name="can"  //ecmascript 9dan önce kullanılan bir değişken
//type safe değil

//ecmascript 9dan sonra let ve const kullanılmaya başlandı

//let name="can" //değişken tanımlamak için yani içindeki değişkeni değştirebiliriz

//const name="can" //sabit tanımlamak için yani içindeki değişken değiştirilemez sabittir.

/*
let name="can"
console.log(name)

//var ve let farkları
//var function scope -fonksiyonun dışına çıkar- let block scope -fonksiyonun dışına çıkmaz-

//fonksiyon tanımlama:

function test(){
    if (true){
        var degisken="merhaba"
    }
    if(true){
        console.log(degisken)
    }

}
test()

//var keyword değişkenler tekrar tanımlanabilir
//aşağıdaki örneğin aynısını let ile yapamazsın. 

var degisken="merhaba"
var degisken="hello"
console.log(degisken)

//hoisting: bir değişkeni önce tanımlama sonra kulllanmak
degisken="merhaba dünya"
console.log(degisken)
var degisken


let name="can"
const adi="can"
name="ahmet"
adi="ahmet"
//veritabanından çekilen bir şey const un içine atılır böylece hiç değişmez

//let mutable const immutable




var agirlik=50 
if(agirlik>49){
    var miktar=1.4
    console.log(`${miktar}su içmelisin`) //alt gr+; ile parantez içindekini yapıyoruz. stringin içine değişken yazabilmemize yarıyor
}
console.log(miktar)


//geleneksel yöntem

function topla(){
    return a+b
}

//arrow function
const topla=(a,b)=>a+b


function test(){
    console.log("merhaba"+this.name)
}
const person={
    name:"can",
    soyle:test,
}
person.soyle()


const test=()=>{
    console.log("merhaba dünya"+this.name)
}
const person={
    name:"can",
    soyle:test,
}
person.soyle()


function deneme(x){
    return x
}
const sonuc=deneme()


function addToCart(urun_adi,adet,fiyat){
    console.log(urun_adi)
    console.log(adet)
    console.log(fiyat)

}
addToCart("elma",5,10)
addToCart("armut",2,20)
addToCart("limon",3,15)

//ikinci olan tercihimiz(aşağıdaki)

let urunler=[{urun_adi:"elma",fiyat:5,adet:20},
{urun_adi:"armut",fiyat:2,adet:11},
{urun_adi:"llimon",fiyat:4,adet:23}]
function addToCart(urun){
    console.log(urun.urun_adi)
    console.log(urun.adet)
    console.log(urun.fiyat)
}
addToCart(urunler)


//aş önemli
let urunler=[{urun_adi:"elma",fiyat:5,adet:20},
{urun_adi:"armut",fiyat:2,adet:11},
{urun_adi:"llimon",fiyat:4,adet:23}]

console.log(urunler[0]["urun_adi"])


//rest operatörü yaratma (çok karşılaşılır)

function topla(...sayilar){
    let toplam=0
    for(let i=0;i<sayilar.length;i++){
        toplam=toplam+sayilar[i]
    }
    console.log(toplam)
}
topla(10,20,30,40,50,60,70)


let bolgeler=["iç anadolu","marmara","karadeniz"]
console.log(bolgeler[1])


//veya

let [birinci, ikinci, ücüncü]=["iç anadolu","marmara","karadeniz"]
console.log(birinci)
//veya

let [birinci, ikinci, ücüncü]=[{adi:"iç anadolu",nufus:"20m"},
{adi:"marmara",nufus:"10m"},
{adi:"karadeniz",nufus:"30m"}]
console.log(birinci.adi)


//spread operatörü
let sayilar=[30,100,200,300,350]
console.log(...sayilar)


//4 farklı fonks tanımlama

function test(){
a+100
}

const test=()=>{
a+100
}

(test)=>a+100

test=>a+100




//conditional ternary operator

if(a=100){
    console.log("100e eşit")
}else {
    console.log("100e eşit değil")
}

//yeni versiyonu

const sonuc=a=100?"100e eşit":"100e eşit değil"

function example(){
    if(condition1){
        return value1
    }else if(condition2){
        return value2
    }else if(condition3){
        return value3
    }else{
        return value4
    }
}

//veya

function example(){
    return condition1?value1:
    condition2?value2:
    condition3?value3:
    value4
}


const sayilar=[1,2,3,4,5,6,7,8,9]
const ciftsayilar=sayilar.filter(function(sayilar){
    return sayilar%2==0
})
console.log(ciftsayilar)

//bunun arrow function ile yapılışı

const sayilar=[1,2,3,4,5,6,7,8,9]
const ciftsayilar=sayilar.filter(sayilar=>sayilar%2==0)
console.log(ciftsayilar)

*/

const sayi=sayilar.find(function(sayilar){
    return sayilar%2==0
})

console.log(sayilar)
