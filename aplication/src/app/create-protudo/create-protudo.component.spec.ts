import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CreateProtudoComponent } from './create-protudo.component';

describe('CreateProtudoComponent', () => {
  let component: CreateProtudoComponent;
  let fixture: ComponentFixture<CreateProtudoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CreateProtudoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CreateProtudoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
