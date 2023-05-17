package colegioRitaLee;

import javax.xml.crypto.Data;

public class CadastroAluno extends Boletim{
	
	String endereco;
	Data data_Nasc;
	int CPF_Aluno;
	private int ra_aluno;
	
	public String mostrarBebida(){
		return 	
				"Nome: " + this.getNome() + 
				"\nEndereco: " + this.getEndereco() +
				"\nData Nascimento: " + this.data_Nasc +
				"\nRA Aluno: " + this.ra_aluno +
				"\nCPF: " + this.CPF_Aluno;
	}
	
	public CadastroAluno() {
		//
	}

	public CadastroAluno(String vNome, String vEndereco, Data vData_Nasc,int vRa_aluno, int vCPF){ 
		this.setNome(vNome);
		this.endereco = vEndereco;
		this.setData_Nasc(vData_Nasc);
		this.ra_aluno = vRa_aluno;
		this.CPF_Aluno = vCPF;
		
		
	}
	
	public boolean verificarPreco(double preco) {
		if(preco<25) {
			return true;
		}else {
			return false;
		
		}
	}

	public String getEndereco() {
		return endereco;
	}

	public void setEndereco(String endereco) {
		this.endereco = endereco;
	}

	public Data getData_Nasc() {
		return data_Nasc;
	}

	public void setData_Nasc(Data data_Nasc) {
		this.data_Nasc = data_Nasc;
	}

	public int getCPF_Aluno() {
		return CPF_Aluno;
	}

	public void setCPF_Aluno(int cPF_Aluno) {
		CPF_Aluno = cPF_Aluno;
	}

	public int getRa_aluno() {
		return ra_aluno;
	}

	public void setRa_aluno(int ra_aluno) {
		this.ra_aluno = ra_aluno;
	}

	
	
}
