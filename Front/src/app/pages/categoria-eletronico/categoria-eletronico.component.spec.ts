import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CategoriaEletronicoComponent } from './categoria-eletronico.component';

describe('CategoriaEletronicoComponent', () => {
  let component: CategoriaEletronicoComponent;
  let fixture: ComponentFixture<CategoriaEletronicoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CategoriaEletronicoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CategoriaEletronicoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
