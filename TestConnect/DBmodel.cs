using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using TestConnectDB;
using Microsoft.EntityFrameworkCore;
using Microsoft.Data.Sqlite;
using System.ComponentModel.DataAnnotations;

namespace TestConnectDB
{
	public class Sotrudnik
	{
		[Key]
		public int Id { get; set; }
		public string Fio { get; set; }
		public DateTime Dater { get; set; }
		public bool Pol { get; set; }

		public int Age;
	}
	public class Staj
	{
		[Key]
		public int Id { get; set; }
		public Sotrudnik SotrudnikId { get; set; }
		public DateTime BeginWorkSotrudnik { get; set; }
		public DateTime EndWorkSotrudnik { get; set; }
		public DateTime GosWorkSotrudnik { get; set; }
	}

	public class Report
	{
		[Key]
		public int Id { get; set; }
		public Staj StajId { get; set; }
		public string Nomerreport { get; set; }
		
		//public DateTime CreateReport { get; set; }
	}
	public class Comment
	{
		[Key]
		public int Id { get; set; }
		public Sotrudnik SotrudnikId { get; set; }
		public string CommentsWork { get; set; }
	}


	public class DataContext : DbContext
	{
		public DbSet<Sotrudnik> Sotrudnik { get; set; }
		public DbSet<Staj> Staj { get; set; }
		public DbSet<Report> Report { get; set; }
		public DbSet<Comment> Comment { get; set; }


		public DataContext() => Database.EnsureCreated();

		protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
		{
			//Connected MariyDB 10.6
			//optionsBuilder.UseMySql("server=localhost;user=root;password=root;database=testdb;", new MySqlServerVersion(new Version(10, 6, 0)));
			//Connected MSSQL Server
			optionsBuilder.UseSqlServer(@"Server=(localdb)\MSSQLLocalDB; Database=StajDB; Trusted_Connection=True");
			//optionsBuilder.UseSqlite("Data Source=D:\\staj.db1");
		}
	}

}
