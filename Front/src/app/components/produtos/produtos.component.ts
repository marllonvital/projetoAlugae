import { Component, OnInit } from '@angular/core';
import { EventEmitter, ViewChild} from "@angular/core"
import {MaterializeAction} from "angular2-materialize"

@Component({
  selector: 'app-produtos',
  templateUrl: './produtos.component.html',
  styleUrls: ['./produtos.component.css']
})
export class ProdutosComponent implements OnInit {

  @ViewChild('carousel') carouselElement;
 actions = new EventEmitter<string>();

  produto: any[]=[
    {nome: "Super Nintendo ",
     preco: 100,
     ul: "assets/img/produto_defaut/defaut.png"}
  ];

  imageURLs = [
  "https://image.shutterstock.com/display_pic_with_logo/1264645/364153082/stock-photo-asian-girl-in-sunflower-field-364153082.jpg",
  "https://image.shutterstock.com/display_pic_with_logo/1264645/298927574/stock-photo-a-young-traveler-girl-sit-on-the-wooden-bridge-in-halong-bay-and-enjoy-the-beauty-of-seascape-298927574.jpg",
  "https://image.shutterstock.com/display_pic_with_logo/1264645/298757792/stock-photo-a-young-traveler-girl-sit-on-the-top-of-mountain-in-halong-bay-and-enjoy-the-beauty-of-seascape-298757792.jpg",
  "https://image.shutterstock.com/display_pic_with_logo/2565601/411902890/stock-photo-ha-long-bay-scenic-view-hanoi-vietnam-411902890.jpg",
  "https://image.shutterstock.com/display_pic_with_logo/2565601/413207668/stock-photo-the-temple-of-literature-in-hanoi-vietnam-the-chinese-words-is-poem-of-thie-temple-and-templs-s-413207668.jpg",
  "https://picsum.photos/1000/?random",
  "https://picsum.photos/1000/?random",
  "https://picsum.photos/1000/?random",
  "https://picsum.photos/1000/?random",

];
  // constructor() { }

   showInitialized = false;

  constructor() {
  // example of a hacky way to add an image to the carousel dynamically
  window.setTimeout(() => {
    this.imageURLs = [this.imageURLs[1], ...this.imageURLs]; // duplicate the first iamge
    this.carouselElement.nativeElement.classList.toggle("initialized")
    this.actions.emit("carousel");
  },1000);
}


  ngOnInit() {
  }

  moveNextCarousel(){
    this.actions.emit({ action: 'carousel', params: ['next'] });
 }

 // move prev carousel
 movePrevCarousel(){
   this.actions.emit({ action: 'carousel', params: ['prev'] });

 }

}
