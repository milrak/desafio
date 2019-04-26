import { ProdutoService } from './../produto.service';
import { Produto } from './../produto';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-create-protudo',
  templateUrl: './create-protudo.component.html',
  styleUrls: ['./create-protudo.component.css']
})
export class CreateProtudoComponent implements OnInit {

  produto: Produto = new Produto();
  submitted = false;

  constructor(private produtoService: ProdutoService) { }

  ngOnInit() {
  }

  newProduto(): void{
    this.submitted = false;
    this.produto = new Produto();
  }

  save(){
    this.produtoService.createProduto(this.produto)
      .subscribe(data=> console.log(data), error => console.log(error));
    this.produto = new Produto();

  }

  onSubmit() {
    this.submitted = true;
    this.save();
  }
  
}
