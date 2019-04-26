import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CreateProtudoComponent } from './create-protudo/create-protudo.component';
import { DetailsProdutoComponent } from './details-produto/details-produto.component';
import { ListPodutoComponent } from './list-poduto/list-poduto.component';
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    CreateProtudoComponent,
    DetailsProdutoComponent,
    ListPodutoComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
