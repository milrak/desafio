import { Observable } from "rxjs";
import { ProdutoService } from "./../produto.service";
import { Produto } from "./../produto";
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-list-poduto',
  templateUrl: './list-poduto.component.html',
  styleUrls: ['./list-poduto.component.css']
})
export class ListPodutoComponent implements OnInit {

  produtos: Observable<Produto[]>;

  constructor(private produtoService: ProdutoService) { }

  ngOnInit() {
    this.reloadData();
  }

  reloadData() {
    this.produtos = this.produtoService.getProdutoList();
  }

  deleteProduto(id: number) {
    this.produtoService.deleteProduto(id)
      .subscribe(
        data => {
          console.log(data);
          this.reloadData();
        },
        error => console.log(error));
  }

}
