package model;

public class UsuarioMODEL {
	private int id_usuario;
	private String nome_usario, senha_usuario;
	
	
	public int getId_usuario() {
		return id_usuario;
	}
	public void setId_usuario(int id_usuario) {
		this.id_usuario = id_usuario;
	}
	public String getNome_usario() {
		return nome_usario;
	}
	public void setNome_usario(String nome_usario) {
		this.nome_usario = nome_usario;
	}
	public String getSenha_usuario() {
		return senha_usuario;
	}
	public void setSenha_usuario(String senha_usuario) {
		this.senha_usuario = senha_usuario;
	}

}
