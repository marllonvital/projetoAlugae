import { TestBed } from '@angular/core/testing';

import { CadastroProdutoService } from '.service/cadastro-produto.service';

describe('CadastroProdutoService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: CadastroProdutoService = TestBed.get(CadastroProdutoService);
    expect(service).toBeTruthy();
  });
});
