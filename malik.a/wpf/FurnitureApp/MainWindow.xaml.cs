using System;
using System.Data;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;

namespace FurnitureApp
{
	public partial class MainWindow : Window
	{

		public class YourDataObject
		{
			public string Column1 { get; set; }
			public string Column2 { get; set; }
		}

		private readonly MySqlHelper mySqlHelper;

		public MainWindow()
		{
			InitializeComponent();

			string connectionString = "Server=localhost;Database=my_furniture_factory;User ID=root;Password='';";
			mySqlHelper = new MySqlHelper(connectionString);

			RefreshData();

		}

		private void RefreshData()
		{
			string selectCategoryQuery = "SELECT * FROM category";
			DataTable categoryTable = mySqlHelper.ExecuteQuery(selectCategoryQuery);
			categoryDataGrid.ItemsSource = categoryTable.DefaultView;

			string selectFurnitureQuery = "SELECT * FROM furniture";
			DataTable furnitureTable = mySqlHelper.ExecuteQuery(selectFurnitureQuery);
			furnitureDataGrid.ItemsSource = furnitureTable.DefaultView;
		}

		private void AddCategoryButton_Click(object sender, RoutedEventArgs e)
		{
			string insertCategoryQuery = "INSERT INTO category (name) VALUES ('New Category')";
			int rowsAffected = mySqlHelper.ExecuteNonQuery(insertCategoryQuery);
			MessageBox.Show($"{rowsAffected} rows added");
			RefreshData();
		}

		private void RefreshCategoriesButton_Click(object sender, RoutedEventArgs e)
		{
			RefreshData();
		}

		private void DeleteCategoryButton_Click(object sender, RoutedEventArgs e)
		{
			DataRowView selectedRow = (DataRowView)categoryDataGrid.SelectedItem;

			if (selectedRow != null)
			{
				int categoryId = Convert.ToInt32(selectedRow["id"]);
				string deleteCategoryQuery = $"DELETE FROM category WHERE id = {categoryId}";
				int rowsAffected = mySqlHelper.ExecuteNonQuery(deleteCategoryQuery);
				MessageBox.Show($"{rowsAffected} rows deleted");
				RefreshData();
			}
			else
			{
				MessageBox.Show("Выберите категорию для удаления.");
			}
		}

		private void AddFurnitureButton_Click(object sender, RoutedEventArgs e)
		{
			string insertFurnitureQuery = "INSERT INTO furniture (name, description, category_id, price) VALUES ('New Furniture', 'Description', 1, 0.00)";
			int rowsAffected = mySqlHelper.ExecuteNonQuery(insertFurnitureQuery);
			MessageBox.Show($"{rowsAffected} rows added");
			RefreshData();
		}

		private void RefreshFurnitureButton_Click(object sender, RoutedEventArgs e)
		{
			RefreshData();
		}

		private void DeleteFurnitureButton_Click(object sender, RoutedEventArgs e)
		{
			DataRowView selectedRow = (DataRowView)furnitureDataGrid.SelectedItem;

			if (selectedRow != null)
			{
				int furnitureId = Convert.ToInt32(selectedRow["id"]);
				string deleteFurnitureQuery = $"DELETE FROM furniture WHERE id = {furnitureId}";
				int rowsAffected = mySqlHelper.ExecuteNonQuery(deleteFurnitureQuery);
				MessageBox.Show($"{rowsAffected} rows deleted");
				RefreshData();
			}
			else
			{
				MessageBox.Show("Выберите запись о мебели для удаления.");
			}
		}
	}
}
