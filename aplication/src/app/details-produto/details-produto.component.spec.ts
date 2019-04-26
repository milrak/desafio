import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailsProdutoComponent } from './details-produto.component';

describe('DetailsProdutoComponent', () => {
  let component: DetailsProdutoComponent;
  let fixture: ComponentFixture<DetailsProdutoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetailsProdutoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailsProdutoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
