<h1>Instituições</h1>
<h3>Formulário de Instituições</h3>

<?php echo form_open('instituicao/salvar'); ?>

<label for="nome">Nome</label>
<input type="input" name="nome" value="<?php echo $instituicao['nome']; ?>" /><br />

<label for="text">Descrição</label>
<input type="input" name="descricao" value="<?php echo $instituicao['descricao']; ?>"><br />

<label for="text">Especialidade</label>
<input type="input" name="especialidade" value="<?php echo $instituicao['especialidade']; ?>"><br />

<label for="text">Endereço</label>
<input type="input" name="endereco" value="<?php echo $instituicao['endereco']; ?>"><br />

<label for="text">Telefone</label>
<input type="input" name="telefone" value="<?php echo $instituicao['telefone']; ?>"><br />

<!-- Campo oculto hidden que armazena o id do usuário editado -->
<input type="hidden" name="id"  value="<?php echo $instituicao['id']; ?>" />
<input type="submit" name="submit" value="Salvar" />

</form>