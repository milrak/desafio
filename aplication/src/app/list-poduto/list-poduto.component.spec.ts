import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ListPodutoComponent } from './list-poduto.component';

describe('ListPodutoComponent', () => {
  let component: ListPodutoComponent;
  let fixture: ComponentFixture<ListPodutoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ListPodutoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ListPodutoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
