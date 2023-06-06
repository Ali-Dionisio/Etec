package gui;

import java.awt.BorderLayout;
import java.awt.Container;
import java.awt.Dimension;
import java.awt.FlowLayout;
import java.awt.GridLayout;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class TarefaLayout {
	public TarefaLayout() {
	JFrame meuFrame = new JFrame();
	meuFrame.setTitle("Exemplo Janela");
	
	JButton btnOK = 			new JButton();
	btnOK.setText("OK");
	JButton btnCancel = 		new JButton("Cancel");
	JButton btnCurtiu = 		new JButton("Curtiu");
	JButton btnCompartilhar = 	new JButton("Compartilhar");
	JButton btnNaoCurtiu = 		new JButton("Não Curtiu");
	JButton btnDenunciar = 		new JButton("Denunciar");
	
	Container c = meuFrame.getContentPane();
	JPanel cPanel1 =  new  JPanel();  
	JPanel cPanel2 =  new  JPanel();  
	
	c.add(btnOK /*, BorderLayout.NORTH deixa na parte superior da tela*/);
	btnOK.setPreferredSize(new Dimension(/*Largura*/200, /*Altura*/ 300));
	//meuFrame.getContentPane().add(btnOK, BorderLayout.SOUTH);
	c.add(btnCancel /*, BorderLayout.SOUTH deixa na parte inferior da tela*/);
	btnCancel.setPreferredSize(new Dimension(/*Largura*/200,/*Altura*/ 300));
	//meuFrame.getContentPane().add(btnCancel, BorderLayout.SOUTH);

	c.add(btnCurtiu/*, BorderLayout.NORTH deixa na parte superior da tela*/);
	btnCurtiu.setPreferredSize(new Dimension(/*Largura*/200, /*Altura*/ 150));
	
	c.add(btnCompartilhar /*, BorderLayout.SOUTH deixa na parte inferior da tela*/);
	btnCompartilhar.setPreferredSize(new Dimension(/*Largura*/200,/*Altura*/ 150));
	
	c.add(btnNaoCurtiu/*, BorderLayout.NORTH deixa na parte superior da tela*/);
	btnNaoCurtiu.setPreferredSize(new Dimension(/*Largura*/200, /*Altura*/ 150));
	
	c.add(btnDenunciar /*, BorderLayout.SOUTH deixa na parte inferior da tela*/);
	btnDenunciar.setPreferredSize(new Dimension(/*Largura*/200,/*Altura*/ 150));
	
	//c.setLayout(new FlowLayout());
	c.setLayout(new GridLayout(/*linha*/0,/*coluna*/2, 3, 3));
	//c.setLayout(new  FlowLayout(FlowLayout.LEFT));

	//c.setLayout(new BorderLayout());
	
	meuFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	meuFrame.setSize(/*Largura*/420,/*Altura*/ 650);
	meuFrame.setVisible(true);
	
	}
	public static void main(String[] args) {
		new TarefaLayout();
	}
}
