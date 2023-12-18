using MySql.Data.MySqlClient;
using System;
using System.Data;

public class DatabaseHelper
{
    private MySqlConnection connection;
    private string connectionString = "Server=localhost;Database=test_poisk;User ID=root;Password='';";

    public DatabaseHelper()
    {
        InitializeDatabaseConnection();
    }

    private void InitializeDatabaseConnection()
    {
        try
        {
            connection = new MySqlConnection(connectionString);
            connection.Open();
        }
        catch (Exception ex)
        {
            Console.WriteLine($"Error: {ex.Message}");
        }
    }

    public DataTable ExecuteQuery(string query)
    {
        try
        {
            MySqlCommand cmd = new MySqlCommand(query, connection);
            MySqlDataAdapter adapter = new MySqlDataAdapter(cmd);
            DataTable dataTable = new DataTable();
            adapter.Fill(dataTable);
            return dataTable;
        }
        catch (Exception ex)
        {
            Console.WriteLine($"Error: {ex.Message}");
            return null;
        }
    }

    // Добавьте другие методы для вставки, обновления и удаления данных при необходимости
}
