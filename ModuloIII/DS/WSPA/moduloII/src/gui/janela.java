package gui;

import java.awt.BorderLayout;
import java.awt.Container;
import java.awt.FlowLayout;
import java.awt.GridLayout;

import javax.swing.JButton;
import javax.swing.JFrame;

public class janela {
	
	public janela() {
		JFrame meuFrame = new JFrame();
		meuFrame.setTitle("Exemplo Janela");
		
		JButton btnOK = new JButton(/*"Botão"*/);
		btnOK.setText("OK");
		JButton btnCancel = new JButton("Cancel");
		Container c = meuFrame.getContentPane();
		
		c.add(btnOK, BorderLayout.NORTH);
		c.add(btnCancel, BorderLayout.SOUTH);
		
		
		//c.setLayout(new FlowLayout());
		//c.setLayout(new GridLayout(1,2));
		//c.setLayout(new BorderLayout());
		
		meuFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		meuFrame.setSize(500, 400);
		meuFrame.setVisible(true);
		
		
		
	}
	
	public static void main(String[] args) {
		 new janela();
	}
}
