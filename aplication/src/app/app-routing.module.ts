import { ListPodutoComponent } from './list-poduto/list-poduto.component';
import { CreateProtudoComponent } from './create-protudo/create-protudo.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'produtos', pathMatch: 'full' },
  { path: 'produtos', component: ListPodutoComponent },
  { path: 'add', component: CreateProtudoComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
